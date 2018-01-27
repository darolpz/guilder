import { Component } from '@angular/core';
import {Router} from '@angular/router';
import { ApiService } from '../services/api.service';


@Component({
  selector: 'settings',
  templateUrl: '../views/settings.html',
  providers: [ApiService]
})


export class SettingsComponent {
    public title:string;   
    constructor(
        private _apiService:ApiService,
        private _router: Router
        ){
        this.title = 'Ajustes de usuario';
    }
    
    ngOnInit(){
        this.redirectIfNotLog();
        console.log('Se ha cargado el componente de ajustes');
    }
    
    redirectIfNotLog() {
        let identity = this._apiService.getIdentity();
        if (identity == null) {
            this._router.navigate(["/"]);
        }
    }
    
      
}


