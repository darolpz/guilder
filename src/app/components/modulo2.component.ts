import { Component } from '@angular/core';
import { Modulo2Service } from '../services/modulo2.service';
import { Materia } from '../models/materia';

@Component({
  selector: 'modulo2',
  templateUrl: '../views/modulo2.html',
  providers: [Modulo2Service]
})
export class Modulo2Component{
    public title:string;
    public materias:Materia[];
    
    constructor(
        private _modulo2Service:Modulo2Service
        ){
        this.title='Historial de comisiones';
    }
    
    ngOnInit(){
        console.log('Se ha cargado el listado de materias');
        
        this._modulo2Service.getMaterias().subscribe(
        result => {
                this.materias = result;
        },
        error=>{
            console.log(<any>error);
        }
        );
    }
    
}