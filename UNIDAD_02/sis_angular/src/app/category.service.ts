import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { Category } from './category';

@Injectable({
  providedIn: 'root'
})
export class CategoryService {

  selectCategory:Category=new Category();
  reqHeader=new HttpHeaders({
    'Content-Type':'aplication/json'
  });

  constructor(private http:HttpClient) { }
  getCategories():Observable<Category>{
    return this.http.get<Category>('http://127.0.0.1:8000/api/categories');
  }

  createCategory(category:Category):Observable<Category>{
    return this.http.post('http://127.0.0.1:8000/api/categories', category, {headers:this.reqHeader});
  }
}
