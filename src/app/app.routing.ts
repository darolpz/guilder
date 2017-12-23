import { ModuleWithProviders } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

// Componentes
import { HomeComponent } from './components/home.component';
import { ErrorComponent } from './components/error.component';
import { Modulo1Component } from './components/modulo1.component';
import { Modulo2Component } from './components/modulo2.component';
import { Modulo3Component } from './components/modulo3.component';
import { Modulo4Component } from './components/modulo4.component';

const appRoutes: Routes = [
	{path: '', component: HomeComponent},
	{path: 'home', component: HomeComponent},
        {path: 'modulo1', component: Modulo1Component},
        {path: 'modulo2', component: Modulo2Component},
        {path: 'modulo3', component: Modulo3Component},
        {path: 'modulo4', component: Modulo4Component},
	{path: '**', component: ErrorComponent}
];

export const appRoutingProviders: any[] = [];
export const routing: ModuleWithProviders = RouterModule.forRoot(appRoutes);