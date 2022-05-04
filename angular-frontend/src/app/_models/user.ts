/* Defines the User entity */
export class User {
    id: number;
    token: string;
    email: string;
    username: string;
    password: string;
    firstname: string;
    lastname: string;
    isAuthenticated: boolean;
}