describe('Admin Can Open Login Page', () => {
  it('Admin Can Login', () => {
    Cypress.on('uncaught:exception', (err, runnable) => {
      return false;
    });
    cy.visit("http://127.0.0.1:8000/");
    cy.get(':nth-child(2) > .contact > strong').contains("Username");
    cy.get(':nth-child(3) > .contact > strong').contains("Password");
    cy.get('.nav-link').contains("Register");
    cy.get('#username').type("admin");
    cy.get('#password').type("admin1");
    cy.get('#login').click();
    cy.get('#username').type("admin");
    cy.get('#password').type("admin123");
    cy.get('#login').click();
    cy.get('#navbarDropdown').click();
    cy.get('.dropdown-item').click();
  })
})