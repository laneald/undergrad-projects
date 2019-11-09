/* 
     hmwk3_ldickerson5_PlayerController.cs 
     
     Laneal Dickerson 
     Account: ldickerson5 
     CSc 4821 
     Homework 3 
     Due date: 10/24/2019 
     
     Description:
         The program is a sphere that is surronded by four walls on a plane with 2 obstacles and 3 cylinders that act as a "goal". When the player
         collides with the barriers it will bounce back with a pre-defined force and when the player collides with a cylinder it will give the player
         a goal. When the player reaches a score of 3 and hits the goal the game will end and display that the player has won.
     Input:
         The program inputs are the general directional keys.
     Output:
         The program outputs general movement of the sphere when the input keys are pressed and will output the score and a "You win" text.
*/
using UnityEngine;

public class PlayerController : MonoBehaviour
{
    //declare and initialize variables
    public float speed = 100.0f;
    public float knockBackForce = 20.0f;
    public float moveHorizontal;
    public float moveVertical;
    Rigidbody rb;
    private UIManagement _uiManager;
    private bool _playerDead = false;

    // Start is called before the first frame update
    void Start()
    {
        //get the rigigbody component for manipulation throughout code
        rb = gameObject.GetComponent<Rigidbody>();
        //get the ui component so that we can use methods from the ui script
        _uiManager = GameObject.Find("Canvas").GetComponent<UIManagement>();
    }

    void FixedUpdate()
    {
        //if the player is dead then stop all movement
        if (!_playerDead)
        {
            //movement for the player in the x and y
            moveHorizontal = Input.GetAxis("Horizontal");
            moveVertical = Input.GetAxis("Vertical");

            Vector3 movement = new Vector3(moveHorizontal, 0.0f, moveVertical);
            rb.AddForce(movement * speed * Time.deltaTime);
        }

    }

    private void OnTriggerEnter(Collider other)
    {
        //if the player collides with an obstacle it will destroy the obstacle and add 1 to the player's score
        if (other.tag == "Obstacle")
        {
            Destroy(other.gameObject);
            _uiManager.UpdateScore();
        }
        //Knocks the player back with a force of 20.0f if the player collids with a barrier
        if (other.tag == "Barrier")
        {
            Vector2 knockBackVel = new Vector2((other.transform.position.x - this.gameObject.transform.position.x) * knockBackForce,
                (other.transform.position.y - this.gameObject.transform.position.y) * knockBackForce);
            rb.velocity = -knockBackVel;
        }
    }
    //method to see if player is dead so we can control movement
    public void PlayerDead()
    {
        _playerDead = true;
    }
}
