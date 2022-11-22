import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { School } from '../school';
import { SchoolService } from '../school.service';

@Component({
  selector: 'app-list-school',
  templateUrl: './list-school.component.html',
  styleUrls: ['./list-school.component.css']
})
export class ListSchoolComponent implements OnInit {

  listSchools:any=[];

  constructor(public ss:SchoolService, private router:Router) { }

  ngOnInit(): void {
    this.loadSchools();
  }

  loadSchools(){
    return this.ss.getSchools().subscribe((data:{})=>{
      this.listSchools=data;
    })
  }

  onEdit(school:School){
    console.log(school);
    this.ss.selectSchool=Object.assign({}, school);
    this.router.navigate(["/add-school"]);
  }

  onDelete(id:number){
    this.ss.deleteSchool(id).subscribe((response)=>{
      this.loadSchools();
    });
  }


}
