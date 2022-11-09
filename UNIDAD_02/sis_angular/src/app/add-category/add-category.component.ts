import { Component, OnInit } from '@angular/core';
import { NgForm } from '@angular/forms';
import { Router } from '@angular/router';
import { Category } from '../category';
import { CategoryService } from '../category.service';

@Component({
  selector: 'app-add-category',
  templateUrl: './add-category.component.html',
  styleUrls: ['./add-category.component.css']
})
export class AddCategoryComponent implements OnInit {

  constructor(public categoryService:CategoryService, private router:Router) { }

  ngOnInit(): void {
  }

  submitForm(categoryForm:NgForm){
    this.categoryService.createCategory(categoryForm.value).subscribe((response)=>{
      this.router.navigate([""]);
    });
  }

  resetForm(categoryForm:NgForm){
    if(categoryForm!=null){
      categoryForm.reset();
      this.categoryService.selectCategory=new Category();
    }
  }

}
