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
        return this._http.get(this.url+'getMaterias').map(res => res.json());
        
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
        return this._http.post(this.url+'registro',params,{headers:headers})
                .map(res => res.json());
    }
    
    login(user){
        let json=JSON.stringify(user);        
        let params='json='+json;
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'login',params,{headers:headers})
                .map(res => res.json());
    }
    
    getIdentity(){
        let identity = JSON.parse(localStorage.getItem('guilderidentity'));
        
        if(identity != "undefined"){
            this.identity = identity;
        }else{
            this.identity = null
        }
        return this.identity;
    }
    
    getTokens(){
        return this._http.get(this.url+'getTokens').map(res => res.json());
    }
    deleteToken(id){
        let json = JSON.stringify(id);
        let param = 'json='+json;
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'deleteToken',param,{headers:headers})
            .map(res => res.json());
    }
    
    createToken(){
        return this._http.get(this.url+'createToken').map(res => res.json());
    }
    
    changeEmail(email,pass,id){
        let param = 'id='+id+'&pass='+pass+'&email='+email;
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'changeEmail',param,{headers:headers})
            .map(res => res.json());
    }
    
    changePass(oldpass,newpass,id){
        let param = 'id='+id+'&oldpass='+oldpass+'&newpass='+newpass;
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'changePass',param,{headers:headers})
            .map(res => res.json());
    }
    
    getAllComisions(){
        return this._http.get(this.url+'allComisions').map(res => res.json());
    }
    
    getUsers(){
        return this._http.get(this.url+'getUsers').map(res => res.json());
    }
    getHorarios(){
        return this._http.get(this.url+'getHorarios').map(res => res.json());
    }
    
    deleteComision(id){
        let param = 'id='+id;
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'deleteComision',param,{headers:headers})
            .map(res => res.json());
    }
    
    deleteHorario(id){
        let param = 'id='+id;
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'deleteHorario',param,{headers:headers})
            .map(res => res.json());
    }
    deleteUser(id){
        let param = 'id='+id;
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'deleteUser',param,{headers:headers})
            .map(res => res.json());
    }
    
    createComision(comision){
        let json = JSON.stringify(comision);
        let param = 'json='+json;
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'createComision',param,{headers:headers})
            .map(res => res.json());
    }
    
    createHour(hour){
        let json = JSON.stringify(hour);
        let param = 'json='+json;
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'createHour',param,{headers:headers})
            .map(res => res.json());
    }
    
    getComision(id){     
        let params='id='+id;       
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'getComision',params,{headers:headers})
                .map(res => res.json());
    }
    
    editComision(id,comision){
        let json = JSON.stringify(comision);
        let param = 'json='+json+'&id='+id;
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'editComision',param,{headers:headers})
            .map(res => res.json());
    }
    
    getHour(id){     
        let params='id='+id;       
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'getHour',params,{headers:headers})
                .map(res => res.json());
    }
    
    editHour(id,hour){
        let json = JSON.stringify(hour);
        let param = 'json='+json+'&id='+id;
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'editHour',param,{headers:headers})
            .map(res => res.json());
    }
    
    getUser(id){     
        let params='id='+id;       
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'getUser',params,{headers:headers})
                .map(res => res.json());
    }
    
    editUser(id,user){
        let json = JSON.stringify(user);
        let param = 'json='+json+'&id='+id;
        let headers = new Headers({'Content-Type':'application/x-www-form-urlencoded'});
        return this._http.post(this.url+'editUser',param,{headers:headers})
            .map(res => res.json());
    }
}