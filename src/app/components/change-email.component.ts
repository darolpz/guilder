import { Component } from '@angular/core';
import {Router, ActivatedRoute, Params} from '@angular/router';
import { ApiService } from '../services/api.service';
import { User } from '../models/user';


@Component({
  selector: 'change-email',
  templateUrl: '../views/change-email.html',
  providers: [ApiService]
})

export class ChangeEmailComponent {
    public title:string;   
    public email:string;
    public pass:string;
    public id;
    public flag:number;
    
    constructor(
        private _apiService:ApiService,
        private _router: Router
        ){
        this.title = 'Ajustes de usuario';
        this.id = this._apiService.getIdentity().id;
    }
    
    ngOnInit(){
        this.redirectIfNotLog();
        console.log('Se ha cargado el componente de actualizacion de email');
    }
    
    redirectIfNotLog() {
        let identity = this._apiService.getIdentity();
        if (identity == null) {
            this._router.navigate(["/"]);
        }
    }
    
    onSubmit(){
        this._apiService.changeEmail(this.email,this.pass,this.id).subscribe(
                response => {
                    if (response.code == 200){
                        this.flag = 2;
                        let iden = this._apiService.getIdentity();
                        iden.email = this.email;
                        localStorage.removeItem('guilderidentity');
                        localStorage.setItem('guilderidentity',JSON.stringify(iden));
                        window.location.href = '/';
                    }else{
                        this.flag = 1;
                    }
                },
                error => {
                    console.log(<any>error);
                }
                );
    }
}
