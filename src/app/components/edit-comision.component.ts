import {Component} from '@angular/core';
import {Router, ActivatedRoute, Params} from '@angular/router';
import {ApiService} from '../services/api.service';
import { Comision } from '../models/comision';
import { Materia } from '../models/materia';


@Component({
    selector: 'edit-comision',
    templateUrl: '../views/edit-comision.html',
    providers: [ApiService]
})
export class EditComisionComponent {
    public title:string;
    public materias:Materia[];
    public loading:string;
    public status:number;
    public comision:Comision;
    
    constructor(       
        private _apiService:ApiService,
        private _route: ActivatedRoute,
        private _router: Router
        ){
        this.title = 'Editar comision';
        this.comision=new Comision('','','');
    }
    
    ngOnInit(){
      this.redirectIfUser(); 
      this.getComision();
      console.log('Se ha cargado el componente de administracion de edicion de comisiones');
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
    getComision(){
            this.loading = 'show';
            this._route.params.forEach((params: Params) =>{                
                let id = +params['id'];
                this._apiService.getComision(id).subscribe(
                    response => {                 
                            this.loading = 'hide';
                            this.comision = response; 
                    },
                    error => {
                        console.log(<any>error);
                    });
            });
        }
    
    onSubmit(){
        this._route.params.forEach((params: Params) =>{
            let id = +params['id']; 
            this.comision.idmateria = this.comision.materiamateria.idmateria;
            this._apiService.editComision(id,this.comision).subscribe(
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
              });                  
           
            
        
    }
}