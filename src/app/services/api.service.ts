import { Injectable } from '@angular/core';
import { Http, Response, Headers, RequestOptions } from '@angular/http';
import  'rxjs/add/operator/map';
import { Observable } from 'rxjs/Observable';
import { GLOBAL } from './global';
import { Comision } from '../models/comision';

@Injectable()
export class ApiService {
    public url: string;
    
    constructor(
    public _http: Http
    ){
        this.url = GLOBAL.url;
    }
    
    getMaterias(){
        return this._http.get(this.url+'getmaterias').map(res => res.json());
        
    }
    
    getComisiones(comision:Comision){
        let json=JSON.stringify(comision);        
        let params='json='+json;
        
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'m2',params,{headers:headers})
                .map(res => res.json());
                

    }
    
    postEncuesta(materias){
        let json=JSON.stringify(materias);        
        let params='json='+json;
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'encuesta',params,{headers:headers})
                .map(res => res.json());
    }
}