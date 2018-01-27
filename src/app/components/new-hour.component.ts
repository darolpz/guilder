import {Component} from '@angular/core';
import {Router, ActivatedRoute, Params} from '@angular/router';
import {ApiService} from '../services/api.service';
import { Comision } from '../models/comision';
import { Horario } from '../models/horario';



@Component({
    selector: 'new-hour',
    templateUrl: '../views/new-hour.html',
    providers: [ApiService]
})


export class NewHourComponent {
    public title:string;
    public comisiones:Comision[];
    public loading:string;
    public status:number;
    public comision:Comision;
    public horario:Horario;
    
    constructor(
        private _apiService:ApiService,
        private _router: Router
        ){
        this.title = 'Crear nuevo horario';
        this.comision=new Comision('','','');;
        this.horario = new Horario();
    }
    
       ngOnInit(){      
        this.redirectIfUser();
        console.log('Se ha cargado el componente de creacion de horaris');
        this.loading = 'show';
        this._apiService.getAllComisions().subscribe(
            response => {
                this.comisiones = response;               
                this.loading = 'hide';
            },
            error=>{
                console.log(<any>error);
            }
        );
        
    }
    
    redirectIfUser() {
        let identity = this._apiService.getIdentity();
        if (identity == null || identity.rol == 'ROLE_USER') {
            this._router.navigate(['/']);
        }
    }
    
    onSubmit(){
        this._apiService.createHour(this.horario).subscribe(
            response => {
                if(response.code == 200){
                    this.status = 1;
                    window.location.href = '/';
                }else{
                    this.status = 2;
                }
            },
            error => {
                console.log(<any>error)
            })
    }
}

