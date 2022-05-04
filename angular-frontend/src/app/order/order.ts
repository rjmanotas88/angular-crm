/* Defines the order entity */
import { Customer } from "../customer";
import { Product } from "../product";

export interface IOrder {
  reference: string;
  amount: number;
  quantity: number;
  customerId: number;
  id: number;
  avatar: string;
  membership: boolean;
  orderDate: any;
  shippedDate: any;
  customer: Customer;
  products: Array<Product>;
  address: any;
  country: any;
  city:any;
  zipcode:any;
}
