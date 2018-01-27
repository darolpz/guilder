import {Component} from '@angular/core';
import {Router, ActivatedRoute, Params} from '@angular/router';
import {ApiService} from '../services/api.service';
import { Comision } from '../models/comision';
import { Materia } from '../models/materia';


@Component({
    selector: 'edit-comision',
    templateUrl: '../views/new-comision.html',
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
      console.log('Se ha cargado el componente de edicion de comisiones');
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
                            this.comision.idmateria = this.comision.materiamateria.idmateria; 
                    },
                    error => {
                        console.log(<any>error);
                    });
            });
        }
    
    onSubmit(){
        this._route.params.forEach((params: Params) =>{
            let id = +params['id']; 
            this._apiService.editComision(id,this.comision).subscribe(
            response => {
                if(response.code == 200){
                    this.status = 3;
                    window.location.href = '/comisions';
                }else{
                    this.status = 4;
                }
            },
            error => {
                console.log(<any>error);
            });
              });                  
           
            
        
    }
}