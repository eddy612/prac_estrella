import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Product } from '../../services/products';
import { Products } from '../../services/products';

@Component({
  selector: 'app-products',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './products.html',
  styleUrl: './products.css'
})
export class Productos {
  productos: Product[] = [];
  productoSeleccionado: Product | null = null;

  constructor(private product: Products) {
    this.productos = this.product.getProducts();
  }

  verMas(producto: Product) {
    this.productoSeleccionado = producto;
  }

  cerrarDetalles() {
    this.productoSeleccionado = null;
  }

  obtenerSimilares(producto: Product): Product[] {
    return this.productos.filter(p => p.categoria === producto.categoria && p.id !== producto.id);
  }
  carrito: Product[] = [];

agregarAlCarrito(producto: Product) {
  this.carrito.push(producto);
}

eliminarDelCarrito(producto: Product) {
  this.carrito = this.carrito.filter(p => p.id !== producto.id);
}

obtenerTotal(): number {
  return this.carrito.reduce((total, prod) => total + prod.precio, 0);
}

}
