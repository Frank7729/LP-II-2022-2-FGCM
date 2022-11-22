import { Component, OnInit } from '@angular/core';
import { NgForm } from '@angular/forms';
import { Router } from '@angular/router';
import { School } from '../school';
import { SchoolService } from '../school.service';

@Component({
  selector: 'app-add-school',
  templateUrl: './add-school.component.html',
  styleUrls: ['./add-school.component.css']
})
export class AddSchoolComponent implements OnInit {

  constructor(public schoolService: SchoolService, private router: Router) { }

  ngOnInit(): void {
  }

  submitForm(schoolForm: NgForm) {
    if (schoolForm.value.id == null) {
      this.schoolService.createSchool(schoolForm.value).subscribe((response) => {
        this.router.navigate([""]);
      });
    } else {
      this.schoolService.updateSchool(schoolForm.value.id, schoolForm.value).subscribe((response) => {
        this.router.navigate([""]);
      });
    }
    this.resetForm;
  }

  resetForm(schoolForm: NgForm) {
    if (schoolForm != null) {
      schoolForm.reset();
      this.schoolService.selectSchool = new School();
    }
  }

}
