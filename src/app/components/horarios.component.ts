import {Component} from '@angular/core';
import {Router, ActivatedRoute, Params} from '@angular/router';
import {ApiService} from '../services/api.service';


@Component({
    selector: 'horarios',
    templateUrl: '../views/horarios.html',
    providers: [ApiService]
})


export class HorariosComponent {
    public title:string;
    public filas:Array<any>;
    public status;
    public loading;
     
     constructor(
         private _apiService:ApiService,
         private _router: Router
         ){
         this.title = 'Horarios';
         }

         
    ngOnInit(){
        this.redirectIfUser();
        this.loading='show';
        this._apiService.getHorarios().subscribe(
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
    borrarHorario(id){
        this._apiService.deleteHorario(id).subscribe(
            response => {
                if(response.code == 200){                  
                    this.status = 1;
                    window.location.href = '/horarios';
                }else{
                    this.status = 2;
                }
            },
            error => {
                console.log(<any>error);
            })
    }     
}