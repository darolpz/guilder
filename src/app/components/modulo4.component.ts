import { Component } from '@angular/core';
import {Router, ActivatedRoute, Params} from '@angular/router';
import { ApiService } from '../services/api.service';
import { Materia } from '../models/materia';
import { Comision } from '../models/comision';
import { Encuesta } from '../models/encuesta';

@Component({
  selector: 'modulo4',
  templateUrl: '../views/modulo4.html',
  providers: [ApiService]
})


export class Modulo4Component {
    public materias:Materia[];
    public title:string;
    public encuesta:Encuesta;
    public flag:boolean;
    public respuesta;
    
    ngOnInit(){     
        this.redirectIfUser();
        console.log('Se ha cargado el componente de modulo 4');
        this._apiService.getMaterias().subscribe(
            result => {
                this.materias = result;
            },
            error=>{
                console.log(<any>error);
            }
        );
    }
    
    constructor(
        private _apiService:ApiService,
        private _router: Router
        ){
            this.encuesta=new Encuesta();
            this.title="Modulo 4";
            this.flag = true;
        }
        
    onSubmit(){

        this._apiService.getResultados(this.encuesta.idmateria).subscribe(
        result => {
            this.flag = false;  
            this.respuesta = result;
            },
        error=>{
            console.log(<any>error);
        });
    }
        redirectIfUser() {
        let identity = this._apiService.getIdentity();
        if (identity == null || identity.rol == 'ROLE_USER') {
            this._router.navigate(['/']);
        }
    }
    negarFlag(){
        this.flag=!this.flag;
    }
}