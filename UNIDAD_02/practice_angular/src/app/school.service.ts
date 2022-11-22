import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { School } from './school';

@Injectable({
  providedIn: 'root'
})
export class SchoolService {

  url='http://127.0.0.1:8000/api/schools';
  selectSchool:School=new School();
  reqHeader=new HttpHeaders({
    'Content-Type':'aplication/json'
  });

  constructor(private http:HttpClient) { }
  getSchools():Observable<School>{
    return this.http.get<School>(this.url);
  }

  createSchool(school:School):Observable<School>{
    return this.http.post(this.url, school, {headers:this.reqHeader});
  }

  updateSchool(id:number, school:School){
    return this.http.put(this.url+'/'+id+'/', school, {headers:this.reqHeader});
  }

  deleteSchool(id:number){
    return this.http.delete(this.url+'/'+id+'/');
  }
}
