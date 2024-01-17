import React from 'react';
import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';
import { Row, Col, Container } from "react-bootstrap";
import Card from 'react-bootstrap/Card';
//import { Link } from 'react-router-dom';

function Register() {
  return (
    <div className='login'>
        <Container className='justify-content-center'>
            <Row className='justify-content-center'>
                <Col>            
                    <Card>
                        <Card.Header className='pt-4 pb-4 text-center bg-primary'>
                            {/* <img src="assets/PHP.png" alt="" /> */}
                            <h5 className='text-light'>Astray Apps Pvt. Ltd</h5>
                        </Card.Header>
                        <Card.Body className='p-4 text-center bg-light'>
                            <h4>Sign Up</h4>                            
                            <Form className='px-5 pt-3'>
                                <Form.Group className="mb-3" controlId="formBasicName">
                                    <div className="justify-content-start align-items-center">
                                      <div style={{ textAlign: 'left', marginRight: '10px', padding: '5px' }}>Name</div>
                                      <Form.Control type="Name" placeholder="Enter your Name" />
                                    </div>
                                </Form.Group>

                                <Form.Group className="mb-3" controlId="formBasicEmail">
                                    <div className="justify-content-start align-items-center">
                                      <div style={{ textAlign: 'left', marginRight: '10px', padding: '5px' }}>Email address</div>
                                      <Form.Control type="email" placeholder="Enter email" />
                                    </div>
                                    {/* <Form.Text className="text-muted">
                                    We'll never share your email with anyone else.
                                    </Form.Text> */}
                                </Form.Group>

                                <Form.Group className="mb-3" controlId="formBasicPassword">
                                    <div className="justify-content-start align-items-center">
                                      <div style={{ textAlign: 'left', marginRight: '10px', padding: '5px' }}>Password</div>
                                      <Form.Control type="password" placeholder="Password" />
                                    </div>
                                </Form.Group>

                                <Form.Group className="mb-3" controlId="formBasicCheckbox">
                                    <Form.Check type="checkbox" label="Save details" style={{ textAlign: 'left' }} />
                                </Form.Group>

                                <Button variant="primary" type="submit" style={{ width: '100%' }}>Register</Button>
                            </Form>
                        </Card.Body>
                        <Card.Footer className="text-center">
                            <p>Already have an account? <Link to="./pages/login">Sign In</Link>.</p>
                        </Card.Footer>
                        
                    </Card>
                </Col>
            </Row>
        </Container>
    </div>
  );
}

export default Register;
