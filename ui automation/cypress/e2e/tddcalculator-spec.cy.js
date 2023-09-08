describe('tddcalculator ui automation', () => {
  beforeEach(()=>{
    cy.visit('http://localhost:8080/')
  })
  it('testAdd', () => {
    cy.wait(2000)
    cy.get('#number1').type(5)
    cy.wait(500)
    cy.get('#number2').type(3)
    cy.wait(1000)
    cy.get('[name="addbutton"]').click()
    cy.get('#result').should("contain",8)
    cy.wait(2000)
  })
  
  it('testSubstract', () => {
    cy.wait(2000)
    cy.get('#number1').type(6)
    cy.wait(500)
    cy.get('#number2').type(4)
    cy.wait(1000)
    cy.get('[name="substractbutton"]').click()
    cy.get('#result').should("contain",2)
  })
})