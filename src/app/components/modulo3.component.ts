import { Component } from '@angular/core';
import { ApiService } from '../services/api.service';
import { Materia } from '../models/materia';
import { Comision } from '../models/comision';
import { Encuesta } from '../models/encuesta';

@Component({
  selector: 'modulo3',
  templateUrl: '../views/modulo3.html',
  providers: [ApiService]
})


export class Modulo3Component {
    public title:string;
    public materias:Materia[];
    public materias2:Encuesta[];
    public materia1:Encuesta;
    public materia2:Encuesta;
    public materia3:Encuesta;
    public materia4:Encuesta;
    public materia5:Encuesta;
    
    public encuesta:Array<any>;
    public turno1;
    public turno2;
    public turno3;
    public turno4;
    public turno5;
    
    constructor(
        private _apiService:ApiService
        ){
            this.title='Encuesta';
            this.materia1=new Encuesta();
            this.materia2=new Encuesta();
            this.materia3=new Encuesta();
            this.materia4=new Encuesta();
            this.materia5=new Encuesta();
            this.materias2=[
            ];
            this.encuesta = [
                
            ];
            
        }
        
    ngOnInit(){     
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
    
    onSubmit(){ 
        this.materias2.push(this.materia1);
        this.materias2.push(this.materia2);
        this.materias2.push(this.materia3);
        this.materias2.push(this.materia4);
        this.materias2.push(this.materia5);
        for(var _i = 0; _i <5; _i++){
            if(this.materias2[_i].idmateria != null){
                this.encuesta.push(this.materias2[_i]);
            }
        }
     
        this._apiService.postEncuesta(this.encuesta).subscribe(
        result => {
            console.log('Encuesta cargada exitosamente');
            }
        error=>{
            console.log(<any>error);
        });
        
        this.materias2=[];
        this.encuesta=[];

           

        
      
        
    }    
}