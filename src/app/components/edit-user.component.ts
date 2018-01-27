import { Component } from '@angular/core';
import {Router, ActivatedRoute, Params} from '@angular/router';
import { ApiService } from '../services/api.service';
import { User } from '../models/user';


@Component({
  selector: 'edit-user',
  templateUrl: '../views/edit-user.html',
  providers: [ApiService]
})


export class EditUserComponent {
    public title:string;
    public user:User;
    public loading:string;
    public status:number;
    
    constructor(
        private _apiService:ApiService,
        private _route: ActivatedRoute,
        private _router: Router
        ){
        this.title = 'Edicion de usuario'
        }
    
    ngOnInit(){
        this.redirectIfUser();
        console.log('Se ha cargado el componente de edicion de usuario'); 
        this.loading = 'show';
        this._route.params.forEach((params: Params) =>{
            let id = +params['id'];   
            this._apiService.getUser(id).subscribe(
                response => {
                    this.user = response;
                    this.user.rol = response.rolrol.rol;
                    this.loading = 'hide';
                    console.log(this.user);
                },
                error => {
                    console.log(<any>error);
                });
        });
    }
    
    redirectIfUser() {
        let identity = this._apiService.getIdentity();
        if (identity == null || identity.rol == 'ROLE_USER') {
            this._router.navigate(['/']);
        }
    }
    
    onSubmit(){
        console.log(this.user);
        this._route.params.forEach((params: Params) =>{
            let id = +params['id']; 
            this._apiService.editUser(id, this.user).subscribe(
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
                });
              }); 
        
    }
    
    
}