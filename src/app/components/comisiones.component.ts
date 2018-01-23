import {Component} from '@angular/core';
import {Router, ActivatedRoute, Params} from '@angular/router';
import {ApiService} from '../services/api.service';


@Component({
    selector: 'comisiones',
    templateUrl: '../views/comisiones.html',
    providers: [ApiService]
})


export class ComisionesComponent {
     public title:string;
     public filas:Array<any>;
     public loading;
     public status;
     
     constructor(
         private _apiService:ApiService,
         private _router: Router
         ){
         this.title = 'Comisiones';
         }
     
    ngOnInit(){
        this.redirectIfUser();
        this.loading='show';
        this._apiService.getAllComisions().subscribe(
            response => {
                this.filas=response;
                this.loading='hide';
            },
            error => {
                console.log(<any>error);
            });
     }
     
     redirectIfUser() {
        let identity = this._apiService.getIdentity();
        if (identity == null || identity.rol == 'ROLE_USER') {
            this._router.navigate(['/']);
        }
    }
    
    borrarComision(id){
        this._apiService.deleteComision(id).subscribe(
            response => {
                if(response.code == 200){                  
                    this.status = 1;
                    window.location.href = '/comisiones';
                }else{
                    this.status = 2;
                }
            },
            error => {
                console.log(<any>error);
            })
    }
     
}


