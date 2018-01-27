import { Component } from '@angular/core';
import {Router} from '@angular/router';
import { ApiService } from '../services/api.service';


@Component({
  selector: 'upload',
  templateUrl: '../views/upload.html',
  providers: [ApiService]
})


export class UploadComponent {
    
}