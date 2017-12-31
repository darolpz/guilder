import { Component } from '@angular/core';
import { ApiService } from './services/api.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
  providers: [ApiService]
})
export class AppComponent {
  title = 'Guilder';
  public identity;
  
    constructor(
        private _apiService:ApiService
        ){
        this.identity = this._apiService.getIdentity();
    }
    
    ngOnInit(){
    }

}
