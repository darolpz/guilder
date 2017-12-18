import { Component } from '@angular/core';
import { ApiService } from '../services/api.service';
import { Materia } from '../models/materia';

@Component({
  selector: 'modulo1',
  templateUrl: '../views/modulo1.html',
  providers: [ApiService]
})
export class Modulo1Component{
    public title:string;
    public materias:Materia[];
    
    constructor(
        private _apiService:ApiService
        ){
        this.title='Historial de comisiones';
    }
    
    ngOnInit(){
        console.log('Se ha cargado el listado de materias');
        
        this._apiService.getMaterias().subscribe(
        result => {
                this.materias = result;
        },
        error=>{
            console.log(<any>error);
        }
        );
    }
    
}