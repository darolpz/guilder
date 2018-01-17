import { Component } from '@angular/core';
import { ApiService } from '../services/api.service';
import { Materia } from '../models/materia';
import { Comision } from '../models/comision';

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
            result => {
                    this.comisiones = result;
            },
            error=>{
                console.log(<any>error);
            }
        );

    }
    
}