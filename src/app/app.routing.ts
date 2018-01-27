import { ModuleWithProviders } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

// Componentes
import { HomeComponent } from './components/home.component';
import { ErrorComponent } from './components/error.component';
import { Modulo1Component } from './components/modulo1.component';
import { Modulo2Component } from './components/modulo2.component';
import { Modulo3Component } from './components/modulo3.component';
import { Modulo4Component } from './components/modulo4.component';
import { RegistroComponent } from './components/registro.component';
import { LoginComponent } from './components/login.component';
import { TokenComponent } from './components/token.component';
import { SettingsComponent } from './components/settings.component';
import { ChangeEmailComponent } from './components/change-email.component';
import { ChangePassComponent } from './components/change-pass.component';
import { ComisionsComponent } from './components/comisions.component';
import { UsersComponent } from './components/users.component';
import { HorariosComponent } from './components/horarios.component';
import { UploadComponent } from './components/upload.component';
import { NewComisionComponent } from './components/new-comision.component';
import { NewHourComponent } from './components/new-hour.component';
import { EditComisionComponent } from './components/edit-comision.component';
import { EditHourComponent } from './components/edit-hour.component';
import { EditUserComponent } from './components/edit-user.component';


const appRoutes: Routes = [
	{path: '', component: HomeComponent},
	{path: 'home', component: HomeComponent},
        {path: 'modulo1', component: Modulo1Component},
        {path: 'modulo2', component: Modulo2Component},
        {path: 'modulo3', component: Modulo3Component},
        {path: 'modulo4', component: Modulo4Component},
        {path: 'registro', component: RegistroComponent},
        {path: 'login', component: LoginComponent},
        {path: 'login/:id', component:LoginComponent},
        {path: 'token', component:TokenComponent},
        {path: 'settings', component:SettingsComponent},
        {path: 'change-pass', component:ChangePassComponent},
        {path: 'change-email', component:ChangeEmailComponent},
        {path: 'comisions', component:ComisionsComponent},       
        {path: 'users', component:UsersComponent}, 
        {path: 'horarios', component:HorariosComponent},
        {path: 'upload', component:UploadComponent},
        {path: 'new-comision', component:NewComisionComponent},
        {path: 'new-hour', component:NewHourComponent},
        {path: 'edit-comision/:id', component:EditComisionComponent},
        {path: 'edit-hour/:id', component:EditHourComponent},
        {path: 'edit-user/:id', component:EditUserComponent},
	{path: '**', component: ErrorComponent}
];

export const appRoutingProviders: any[] = [];
export const routing: ModuleWithProviders = RouterModule.forRoot(appRoutes);