import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AddSchoolComponent } from './add-school/add-school.component';
import { ListSchoolComponent } from './list-school/list-school.component';

const routes: Routes = [
  {path:'', component:ListSchoolComponent},
  {path:'add-school', component:AddSchoolComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
