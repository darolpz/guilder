import { Component } from '@angular/core';
import { ApiService } from '../services/api.service';
import { Materia } from '../models/materia';
import { Comision } from '../models/comision';

@Component({
  selector: 'modulo3',
  templateUrl: '../views/modulo3.html',
  providers: [ApiService]
})


export class Modulo3Component {
    public title:string;
    public materias:Materia[];
    public comision:Comision;
    public materia1:Materia;
    public materia2:Materia;
    public materia3:Materia;
    public materia4:Materia;
    public materia5:Materia;
    
    constructor(
        private _apiService:ApiService
        ){
            this.title='Encuesta';
            this.comision=new Comision('','','');
            this.materia1=new Materia();
            this.materia2=new Materia();
            this.materia3=new Materia();
            this.materia4=new Materia();
            this.materia5=new Materia();
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
        console.log(this.materia1.idmateria);
        console.log(this.materia2.idmateria);
        console.log(this.materia3.idmateria);
        console.log(this.materia4.idmateria);
        console.log(this.materia5.idmateria);
    }    
}