import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class PortfolioService {
  private apiUrl = 'http://localhost:80/backend/api/portfolio'; // Replace with your PHP backend URL

  constructor(private http: HttpClient) { }

  getPortfolioData(): Observable<any[]> {
    return this.http.get<any[]>(this.apiUrl);
  }
}
