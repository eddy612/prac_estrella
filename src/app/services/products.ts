import { Injectable } from '@angular/core';

export interface Product{
  id: number;
  nombre:string;
  descripcion: string;
  precio: number;
  imagen: string;
}

@Injectable({
  providedIn: 'root'
})

export class Products {
  
  private products:Product[] = [
    {
      id: 1,
      nombre: 'Paleta de Colores',
      descripcion : 'Creacion Con Colores',
      precio: 280,
      imagen: '/img/Paleta.jpg'
    },
    {
      id: 2,
      nombre: 'Iluminador',
      descripcion: 'Ilumina partes de rostro muy lindo',
      precio: 179,
      imagen: '/img/Iluminador.jpg'
    },
    {
      id: 3,
      nombre: 'Brillo Labial con un color Rasado',
      descripcion: 'Brillo muy lindo con un tocoque de color sutil',
      precio: 145,
      imagen: '/img/Labial.jpg'
    },
   {
      id: 4,
      nombre: 'kit de Brochas',
      descripcion: 'Bonitas y Suaves',
      precio: 150,
      imagen: '/img/Brochas.jpg'
   }
  ]
  constructor(){}
  getProducts():Product[]{
    return this.products;
  }
}
