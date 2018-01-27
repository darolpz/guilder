import { Component } from '@angular/core';
import {Router, ActivatedRoute, Params} from '@angular/router';
import { ApiService } from '../services/api.service';
import { User } from '../models/user';


@Component({
  selector: 'registro',
  templateUrl: '../views/registro.html',
  providers: [ApiService]
})


export class RegistroComponent {
    public title:string;
    public usuario:User;
    public pass:string;
    public identity;
    
    constructor(
        private _apiService:ApiService,
        private _router: Router
        ){
        this.title = 'Registro';
        this.usuario = new User();
        this.pass = "";
    }
    
    ngOnInit(){
        this.redirectIfLog();
        console.log('Se ha cargado el componente de registro');
    }
    
    redirectIfLog() {
        let identity = this._apiService.getIdentity();
        if (identity != null) {
            this._router.navigate(["/"]);
        }
    }
    
    onSubmit(){
        if(this.usuario.password == this.pass){
            this._apiService.postRegistro(this.usuario).subscribe(
                response => {
                    if(response.code == 200){
                        this.identity = this.usuario;
                        localStorage.setItem('identity',JSON.stringify(this.identity));
                        window.location.href = '/';
                    }
                },
                error=>{
                    console.log(<any>error);
                });
        }else{
            console.log('Las contraseñas no coinciden');
        }    
    }
        
        
}


