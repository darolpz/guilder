import {Component} from '@angular/core';
import {Router, ActivatedRoute, Params} from '@angular/router';
import {ApiService} from '../services/api.service';
import { Comision } from '../models/comision';
import { Materia } from '../models/materia';


@Component({
    selector: 'new-comision',
    templateUrl: '../views/new-comision.html',
    providers: [ApiService]
})


export class NewComisionComponent {
    public title:string;
    public materias:Materia[];
    public loading:string;
    public status:number;
    public comision:Comision;
    
    constructor(       
        private _apiService:ApiService,
        private _router: Router
        ){
        this.title = 'Crear nueva comision';
        this.comision=new Comision('','','');
    }
    
    ngOnInit(){       
        this.redirectIfUser();
        console.log('Se ha cargado el componente de administracion de creacion de comisiones');
        this.loading = 'show';
        this._apiService.getMaterias().subscribe(
            response => {
                this.materias = response;               
                this.loading = 'hide';
            },
            error=>{
            console.log(<any>error);
            }
        );
        
    }
    
    redirectIfUser() {
        let identity = this._apiService.getIdentity();
        if (identity == null || identity.rol == 'ROLE_USER') {
            this._router.navigate(['/']);
        }
    }
    
    onSubmit(){
        this._apiService.createComision(this.comision).subscribe(
            response => {
                if(response.code == 200){
                    this.status = 1;
                    window.location.href = '/';
                }else{
                    this.status = 2;
                }
            },
            error => {
                console.log(<any>error);
            });
            
        
    }
    
}

