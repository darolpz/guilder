import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';

import { routing, appRoutingProviders } from './app.routing';

import { AppComponent } from './app.component';
import { HomeComponent } from './components/home.component';
import { ErrorComponent} from './components/error.component';
import { Modulo1Component } from './components/modulo1.component';
import { Modulo2Component } from './components/modulo2.component';
import { Modulo3Component } from './components/modulo3.component';
import { Modulo4Component } from './components/modulo4.component';
import { RegistroComponent } from './components/registro.component';
import { LoginComponent } from './components/login.component';
import { TokenComponent } from './components/token.component';
import { CalendarHeatmap } from 'angular2-calendar-heatmap';
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





@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    ErrorComponent,
    Modulo1Component,
    Modulo2Component,
    Modulo3Component,
    Modulo4Component,
    RegistroComponent,
    LoginComponent,
    TokenComponent,
    SettingsComponent,
    CalendarHeatmap,
    ChangeEmailComponent,
    ChangePassComponent,
    ComisionsComponent,
    UsersComponent,
    HorariosComponent,
    UploadComponent,
    NewComisionComponent,
    NewHourComponent,
    EditComisionComponent,
    EditHourComponent,
    EditUserComponent

  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    routing
  ],
  providers: [appRoutingProviders],
  bootstrap: [AppComponent]
})
export class AppModule { }
