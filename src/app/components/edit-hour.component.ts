import {Component} from '@angular/core';
import {Router, ActivatedRoute, Params} from '@angular/router';
import {ApiService} from '../services/api.service';
import { Comision } from '../models/comision';
import { Horario } from '../models/horario';


@Component({
    selector: 'edit-hour',
    templateUrl: '../views/new-hour.html',
    providers: [ApiService]
})
export class EditHourComponent {
    public title:string;
    public comisiones:Comision[];
    public loading:string;
    public status:number;
    public comision:Comision;
    public horario:Horario;
    
    constructor(
        private _apiService:ApiService,
        private _route: ActivatedRoute,
        private _router: Router
        ){
        this.title = 'Editar horario';
        this.comision=new Comision('','','');;
        this.horario = new Horario();
    }
    
    ngOnInit(){
      this.redirectIfUser(); 
      this.loading = 'show';
      this.getHorario();
      console.log('Se ha cargado el componente de edicion de horario');       
        this._apiService.getAllComisions().subscribe(
            response => {
                this.comisiones = response;               
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
    getHorario(){
            this.loading = 'show';
            this._route.params.forEach((params: Params) =>{                
                let id = +params['id'];
                this._apiService.getHour(id).subscribe(
                    response => {                 
                            this.horario = response;
                    },
                    error => {
                        console.log(<any>error);
                    });
            });
        }
    
    onSubmit(){
        this._route.params.forEach((params: Params) =>{
            let id = +params['id']; 
            this._apiService.editHour(id, this.horario).subscribe(
                response => {
                    if(response.code == 200){
                    this.status = 3;
                    window.location.href = '/horarios';
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