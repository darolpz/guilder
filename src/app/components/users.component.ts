import {Component} from '@angular/core';
import {Router, ActivatedRoute, Params} from '@angular/router';
import {ApiService} from '../services/api.service';


@Component({
    selector: 'users',
    templateUrl: '../views/users.html',
    providers: [ApiService]
})


export class UsersComponent {
    public title:string;
    public filas:Array<any>;
    public loading;
    public status;
     
     constructor(
         private _apiService:ApiService,
         private _router: Router
         ){
         this.title = 'Lista de usuarios';
         }

         
    ngOnInit(){
        this.redirectIfUser();
        console.log('Se ha cargado el componente de administracion de usuarios');
        this.loading='show';
        this._apiService.getUsers().subscribe(
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
    
        borrarUser(id){
        this._apiService.deleteUser(id).subscribe(
            response => {
                if(response.code == 200){                  
                    this.status = 1;
                    window.location.href = '/users';
                }else{
                    this.status = 2;
                }
            },
            error => {
                console.log(<any>error);
            })
    }
}