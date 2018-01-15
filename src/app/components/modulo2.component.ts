import { Component } from '@angular/core';
import { ApiService } from '../services/api.service';
import { Materia } from '../models/materia';
import { Comision } from '../models/comision';

import { CalendarHeatmap } from 'angular2-calendar-heatmap';
import * as moment from 'moment';
import * as d3 from 'd3';
declare var $:any;


@Component({
  selector: 'modulo2',
  templateUrl: '../views/modulo2.html',
  providers: [ApiService]
})
export class Modulo2Component {
    public title:string;
    public materias:Materia[];
    public comision:Comision;
    public comisiones:Comision[];
    
    public data = [{
                    "date": "2016-01-01",
                    "total": 17164,
                    "details": [
                        {"name": "Lunes",
                            "date": "2016-01-01 0:0:0",
                            "value": 0},
                        {"name": "Martes",
                            "date": "2016-01-01 0:0:0",
                            "value": 0},
                        {"name": "Miércoles",
                            "date": "2016-01-01 0:0:0",
                            "value": 0},
                        {"name": "Jueves",
                            "date": "2016-01-01 0:0:0",
                            "value": 0},
                        {"name": "Viernes",
                            "date": "2016-01-01 0:0:0",
                            "value": 0},
                        {"name": "Sábado",
                            "date": "2016-01-01 0:0:0",
                            "value": 0}]
                }];

  // Set custom color for the calendar heatmap
    color = '#234acd';

  // Set overview type (choices are year, month and day)
    overview = 'day';
    
    // Handler function
    print(val: object):void {
      console.log(val);
  }
    
    constructor(
        private _apiService:ApiService
        ){
        this.title='Historial de comisiones';
        this.comision=new Comision('','','');
        
        
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

        this._apiService.getComisiones(this.comision).subscribe(
            response => {
                    this.comisiones = response;
                    var n = this.data[0].details.length;   
                    if(n > 6){
                        this.data[0].details.splice(6,n-6);
                    }
                    var fecha = "2016-01-01 ";
                    for(let dato of response){
                        this.data[0].details.push({name: dato.dia, date: fecha.concat(dato.inicio), value: dato.segundos});
                    }
                    window.dispatchEvent(new Event('resize')); 
            },
            error=>{
                console.log(<any>error);
            }
        );
         
    }
    
    
    
}