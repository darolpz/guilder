import { Injectable } from '@angular/core';
import { Http, Response, Headers, RequestOptions } from '@angular/http';
import  'rxjs/add/operator/map';
import { Observable } from 'rxjs/Observable';
import { GLOBAL } from './global';
import { Comision } from '../models/comision';

@Injectable()
export class ApiService {
    public url: string;
    public identity;
    
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
    
    getResultados(encuesta){
        let json=JSON.stringify(encuesta);        
        let params='json='+json;
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'resultado',params,{headers:headers})
                .map(res => res.json());
        
    }
    
    postRegistro(user){
        let json=JSON.stringify(user);        
        let params='json='+json;
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'registroapi',params,{headers:headers})
                .map(res => res.json());
    }
    
    login(user){
        let json=JSON.stringify(user);        
        let params='json='+json;
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'loginapi',params,{headers:headers})
                .map(res => res.json());
    }
    
    getIdentity(){
        let identity = JSON.parse(localStorage.getItem('identity'));
        
        if(identity != "undefined"){
            this.identity = identity;
        }else{
            this.identity = null
        }
        return this.identity;
    }
    
    getTokens(){
        return this._http.get(this.url+'gettokens').map(res => res.json());
    }
    deleteToken(id){
        let json = JSON.stringify(id);
        let param = 'json='+json;
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'deletetoken',param,{headers:headers})
            .map(res => res.json());
    }
    
    createToken(){
        return this._http.get(this.url+'createtoken').map(res => res.json());
    }
}