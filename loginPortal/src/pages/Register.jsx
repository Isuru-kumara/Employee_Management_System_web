import React, { useState } from 'react';
import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';
import { Row, Col, Container } from "react-bootstrap";
import Card from 'react-bootstrap/Card';
import { Link } from 'react-router-dom';

function Register() {
    const [name, setName] = useState('');
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [confirmPassword, setConfirmPassword] = useState('');
  const [termsChecked, setTermsChecked] = useState(false);
  const [errorMessage, setErrorMessage] = useState('');

  const handleNameChange = (e) => {
    setName(e.target.value);
  };

  const handleEmailChange = (e) => {
    setEmail(e.target.value);
  };

  const handlePasswordChange = (e) => {
    setPassword(e.target.value);
  };

  const handleConfirmPasswordChange = (e) => {
    setConfirmPassword(e.target.value);
  };

  const handleTermsChange = (e) => {
    setTermsChecked(e.target.checked);
  };

  const handleSubmit = (e) => {
    e.preventDefault();

    if (!name) {
      setErrorMessage('Please enter your name');
      return;
    }

    if (!email || !email.includes('@')) {
      setErrorMessage('Please enter a valid email address');
      return;
    }

    if (!password || password.length < 6) {
      setErrorMessage('Please enter a password with at least 6 characters');
      return;
    }

    if (password !== confirmPassword) {
      setErrorMessage('Passwords do not match');
      return;
    }

    if (!termsChecked) {
      setErrorMessage('Please agree to the terms and conditions');
      return;
    }
    
    setErrorMessage('');
  };

  return (
    <div className='login'>
        <Container className='justify-content-center'>
            <Row className='justify-content-center'>
                <Col>            
                    <Card>
                        <Card.Header className='pt-4 pb-4 text-center bg-primary' style={{ background: '#007BFF', borderRadius: '15px 15px 0 0' }}>                          
                            <h5 className='text-light'>Astray Apps Pvt. Ltd</h5>
                        </Card.Header>
                        <Card.Body className='p-4 text-center bg-light'>
                            <h4>Sign Up</h4>  
                            {errorMessage && <p style={{ color: 'red' }}>{errorMessage}</p>}                          
                            <Form className='px-5 pt-3' onSubmit={handleSubmit}>
                                <Form.Group className="mb-2" controlId="formBasicName">
                                    <div className="justify-content-start align-items-center">
                                      <div style={{ textAlign: 'left', marginRight: '10px', padding: '5px' }}>Name</div>
                                      <Form.Control type="text" value={name} onChange={handleNameChange} />
                                    </div>
                                </Form.Group>

                                <Form.Group className="mb-2" controlId="formBasicEmail">
                                    <div className="justify-content-start align-items-center">
                                      <div style={{ textAlign: 'left', marginRight: '10px', padding: '5px' }}>Email address</div>
                                      <Form.Control type="email" value={email} onChange={handleEmailChange} />
                                    </div>
                                </Form.Group>

                                <Form.Group className="mb-2" controlId="formBasicPassword">
                                    <div className="justify-content-start align-items-center">
                                      <div style={{ textAlign: 'left', marginRight: '10px', padding: '5px' }}>Password</div>
                                      <Form.Control type="password" value={password} onChange={handlePasswordChange} />
                                    </div>
                                </Form.Group>

                                <Form.Group className="mb-3" controlId="formBasicConfirmPassword">
                                    <div className="justify-content-start align-items-center">
                                    <div style={{ textAlign: 'left', marginRight: '10px', padding: '5px' }}>Confirm Password</div>
                                    <Form.Control type="password" value={confirmPassword} onChange={handleConfirmPasswordChange} />
                                    </div>
                                </Form.Group>

                                <Form.Group className="mb-3" controlId="formBasicCheckbox">
                                    <Form.Check type="checkbox" label="Agreed to Terms and Conditions" checked={termsChecked} onChange={handleTermsChange} style={{ textAlign: 'left' }} />
                                </Form.Group>

                                <Button variant="primary" type="submit" style={{ width: '100%' }}>Register</Button>
                            </Form>
                        </Card.Body>
                        <Card.Footer className="text-center pt-4 pb-2">
                            <p>Already have an account? <Link to="/" className='text-decoration-none'>Sign In</Link></p>
                        </Card.Footer>                        
                    </Card>
                </Col>
            </Row>
        </Container>
    </div>
  );
}

export default Register;
