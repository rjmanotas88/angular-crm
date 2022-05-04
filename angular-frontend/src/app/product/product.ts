/* Defines the product entity */

export interface Product {
    id: number;
    avatar: string;
    category_id: number;
    name: string;
    price: number;
    stock: number;
}

export type WithCategory = {
    category: Category
}

export type WithCategoryName = {
    categoryName: string
}

export interface Category {
    id: number;
    categoryName: string;
}
