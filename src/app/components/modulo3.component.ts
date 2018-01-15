import { Component } from '@angular/core';
import {Router, ActivatedRoute, Params} from '@angular/router';
import { ApiService } from '../services/api.service';
import { Materia } from '../models/materia';
import { Encuesta } from '../models/encuesta';

@Component({
  selector: 'modulo3',
  templateUrl: '../views/modulo3.html',
  providers: [ApiService]
})


export class Modulo3Component {
    public title:string;
    public identity;
    public materias:Materia[];
    public materias2:Encuesta[];
    public materia1:Encuesta;
    public materia2:Encuesta;
    public materia3:Encuesta;
    public materia4:Encuesta;
    public materia5:Encuesta;
    
    public encuesta:Array<any>;
    public flag:boolean;
    
    constructor(
        private _apiService:ApiService,
        private _router: Router
        ){
            this.title='Encuesta';
            this.identity = this._apiService.getIdentity();
            this.materia1=new Encuesta();
            this.materia2=new Encuesta();
            this.materia3=new Encuesta();
            this.materia4=new Encuesta();
            this.materia5=new Encuesta();
            this.materias2=[
            ];
            this.encuesta = [                
            ];
            this.flag = true;
        }
        
    ngOnInit(){
        this.redirectIfLog();     
        console.log('Se ha cargado el componente de modulo 2');

        this._apiService.getMaterias().subscribe(
            result => {
                this.materias = result;
            },
            error=>{
                console.log(<any>error);
            }
        );
    }
    redirectIfLog() {
        let identity = this._apiService.getIdentity();
        if (identity == null) {
            this._router.navigate(['/']);
        }
    }
    onSubmit(){ 

        this.materias2.push(this.materia1);
        this.materias2.push(this.materia2);
        this.materias2.push(this.materia3);
        this.materias2.push(this.materia4);
        this.materias2.push(this.materia5);
        this.encuesta.push(this.identity);
        for(var _i = 0; _i <5; _i++){
            if(this.materias2[_i].idmateria != null){
                this.encuesta.push(this.materias2[_i]);
            }
        }
        
        this._apiService.postEncuesta(this.encuesta).subscribe(
        result => {
            this.flag = false;
            console.log('Encuesta cargada exitosamente');
            },
        error=>{
            console.log(<any>error);
        });
        
        this.materias2=[];
        this.encuesta=[];

           

        
      
        
    }    
}