import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import 'bootstrap/dist/css/bootstrap.min.css';
import Stack from 'react-bootstrap/Stack';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';

function Dashboard() {
  return (
    <div className='dashboard mx-5 me-3 ms-3'>
        <Stack gap={2} className='justify-content-center py-3'>
            <Row className='rowCard'>  
                <Col><h4 className='ms-auto'>Dashboard</h4></Col>
            </Row>                
        </Stack>         
    </div>
  )
}

export default Dashboard