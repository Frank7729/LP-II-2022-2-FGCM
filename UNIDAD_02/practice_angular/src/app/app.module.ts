import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HttpClientModule } from '@angular/common/http'
import { FormsModule } from '@angular/forms';
import { AddSchoolComponent } from './add-school/add-school.component';
import { EditSchoolComponent } from './edit-school/edit-school.component';
import { ListSchoolComponent } from './list-school/list-school.component';

@NgModule({
  declarations: [
    AppComponent,
    AddSchoolComponent,
    EditSchoolComponent,
    ListSchoolComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
