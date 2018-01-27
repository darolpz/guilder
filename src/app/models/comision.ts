
import { Materia } from './materia';


    export class Comision{
    public numero:number;
    public profesor:string;
    public year:number;
    public cuatrimestre:number;
    public materia:string;
    public dia:string
    public inicio:string;
    public fin:string;
    public segundos:number;
    public idmateria:number;
    public materiamateria:Materia;
    
    constructor(idmateria,year,cuatrimestre){
        this.idmateria=idmateria;
        this.year=year;
        this.cuatrimestre=cuatrimestre;
    }
}