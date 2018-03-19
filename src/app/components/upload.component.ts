import {Component} from '@angular/core';
import {Router, ActivatedRoute, Params} from '@angular/router';
import {ApiService} from '../services/api.service';
import {GLOBAL} from '../services/global';


@Component({
    selector: 'upload',
    templateUrl: '../views/upload.html',
    providers: [ApiService]
})


export class UploadComponent {
    public title;
    public filesToUpload;
    public resultUpload;
    public year: number;
    public status:number;
    
    constructor(
        private _apiService: ApiService,
        private _route: ActivatedRoute,
        private _router: Router
    ) {
        this.title = 'Cargar archivo';
    }

    ngOnInit() {
        this.redirectIfUser();
    }

    redirectIfUser() {
        let identity = this._apiService.getIdentity();
        if (identity == null || identity.rol == 'ROLE_USER') {
            this._router.navigate(['/']);
        }
    }

    fileChangeEvent(fileInput: any) {
        this.filesToUpload = <Array<File>> fileInput.target.files;
        console.log(this.filesToUpload);
    }

    onSubmit() {
        console.log("asd");
        if (this.filesToUpload == 1){
            this._apiService.makeFileRequest(GLOBAL.url + 'upload-excel', [], this.filesToUpload).then((result) => {
                console.log(result);


            }, (error) => {
                console.log(error);
            });
        }else{
            this.status = 0;
        }
    }
}