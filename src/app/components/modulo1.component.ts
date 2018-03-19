import { Component } from '@angular/core';
import { ApiService } from '../services/api.service';
import { Materia } from '../models/materia';
import { Comision } from '../models/comision';
var timeTable = require("../../assets/timetable.min.js");

@Component({
  selector: 'modulo1',
  templateUrl: '../views/modulo1.html',
  providers: [ApiService]
})
export class Modulo1Component{
    public title:string;
    public materias:Materia[];
    public comision:Comision;
    public comisiones:Comision[];
    
    public actualyear:number;
    public cuatrimestreactual:number;
    
    
    
    constructor(
        private _apiService:ApiService
        ){
        this.title='Organizador de cursada';
        this.actualyear=2017;
        this.cuatrimestreactual=2;
        this.comision=new Comision('',this.actualyear,this.cuatrimestreactual);
        
    }
    
    ngOnInit(){
        console.log('Se ha cargado el listado de materias');
        console.log(timeTable);
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
        this._apiService.getComisiones(this.comision).subscribe(
            result => {
                    this.comisiones = result;
                    console.log(this.comision);
            },
            error=>{
                console.log(<any>error);
            }
        );

    }
    
}