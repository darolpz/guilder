import {Component} from '@angular/core';
import {Router, ActivatedRoute, Params} from '@angular/router';
import {ApiService} from '../services/api.service';
import {User} from '../models/user';


@Component({
    selector: 'login',
    templateUrl: '../views/login.html',
    providers: [ApiService]
})


export class LoginComponent {
    public title: string;
    public identity;
    public usuario: User;
    public token;

    constructor(
        private _apiService: ApiService,
        private _route: ActivatedRoute,
        private _router: Router
    ) {
        this.title = 'Accede';
        this.usuario = new User();
    }
    ngOnInit() {
        this.logout();
        this.redirectIfLog();
    }
    onSubmit() {
        this._apiService.login(this.usuario).subscribe(
            response => {
                if(response.code == 200){
                    this.identity = response.data;
                    localStorage.setItem('guilderidentity',JSON.stringify(this.identity));
                    window.location.href = '/';

            }},
            error => {
                console.log(<any> error);
            }
        );

            
    }

    redirectIfLog() {
        let identity = this._apiService.getIdentity();
        if (identity != null) {
            this._router.navigate(["/"]);
        }
    }

    logout() {
        this._route.params.forEach((params: Params) => {
            let logout = +params['id'];
            if (logout == 1) {
                localStorage.removeItem('guilderidentity');
                this.identity = null;

                window.location.href = '/login';
            }
        });
    }
}