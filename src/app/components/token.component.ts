import {Component} from '@angular/core';
import {Router, ActivatedRoute, Params} from '@angular/router';
import {ApiService} from '../services/api.service';
import {Token} from '../models/token';


@Component({
    selector: 'token',
    templateUrl: '../views/token.html',
    providers: [ApiService]
})


export class TokenComponent {
    public title: string;
    public tokens: Token[];

    constructor(
        private _apiService: ApiService,
        private _router: Router
    ) {
        this.title = 'Administracion de tokens';

    }

    ngOnInit() {
        this.redirectIfUser();
        this._apiService.getTokens().subscribe(
            response => {
                this.tokens = response;
            },
            error => {
                console.log(<any> error);
            }
        );
    }

    deleteToken(id) {
        this._apiService.deleteToken(id).subscribe(
            response => {
                if (response.code == 200) {
                    this._apiService.getTokens().subscribe(
                        response => {
                            this.tokens = response;
                        },
                        error => {
                            console.log(<any> error);
                        }
                    )
                }
            },
            error => {
                console.log(<any> error);
            }
        );
    }
    createToken() {
        this._apiService.createToken().subscribe(
            response => {
                this._apiService.getTokens().subscribe(
                    response => {
                        this.tokens = response;
                    },
                    error => {
                        console.log(<any> error);
                    }
                )
            },
            error => {
                console.log(<any> error);
            }
        );
    }
    redirectIfUser() {
        let identity = this._apiService.getIdentity();
        if (identity == null || identity.rol == 'ROLE_USER') {
            window.location.href = '/';
        }
    }
}


