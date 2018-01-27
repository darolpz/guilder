import { Component } from '@angular/core';
import {Router, ActivatedRoute, Params} from '@angular/router';
import { ApiService } from '../services/api.service';
import { User } from '../models/user';


@Component({
  selector: 'change-pass',
  templateUrl: '../views/change-pass.html',
  providers: [ApiService]
})

export class ChangePassComponent {
    public title:string;  
    public flag:number;
    public id;
    public oldpass:string;
    public newpass:string;
    public newpass2:string; 
    
    constructor(
        private _apiService:ApiService,
        private _router: Router
        ){
        this.title = 'Ajustes de usuario';
        this.id = this._apiService.getIdentity().id;
    }
    
    ngOnInit(){
        this.redirectIfNotLog();
        console.log('Se ha cargado el componente de cambio de password');

    }
    
    redirectIfNotLog() {
        let identity = this._apiService.getIdentity();
        if (identity == null) {
            this._router.navigate(["/"]);
        }
    }
    
    onSubmit(){
        if (this.newpass != this.newpass2){
            this.flag = 1;
        }else{
            this._apiService.changePass(this.oldpass,this.newpass,this.id).subscribe(
                response => {
                    if (response.code == 200){
                        this.flag = 3;                        
                        window.location.href = '/';
                    }else{
                        this.flag = 2;
                    }
                },
                error => {
                    console.log(<any>error);
                }
                );
        }
    }
}

