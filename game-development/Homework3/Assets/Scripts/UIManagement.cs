/* 
     hmwk3_ldickerson5_UIManagement.cs 
     
     Laneal Dickerson 
     Account: ldickerson5 
     CSc 4821 
     Homework 3
     Due date: 10/24/2019 
     
     Description:
         This script controls the ui canvas and displays the goal and the score which is updated every time the player hits an obstacle.
     Input:
         None
     Output:
         The script updates the score to the user and will display a "You win" text upon hitting the pre-defined goal.
*/
using UnityEngine;
using UnityEngine.UI;

public class UIManagement : MonoBehaviour
{
    //declare and initialize variables
    private int _count;
    private int _goal = 3;
    public Text countText;
    public Text goalText;
    public Text gameOverText;
    private PlayerController _player;
    // Start is called before the first frame update
    void Start()
    {
        //initialize count variable and find the player gameobject so we can access script also set the game over text to false so it doesnt display
        _count = 0;
        CountText();
        _player = GameObject.FindGameObjectWithTag("Player").GetComponent<PlayerController>();
        if(_player == null)
        {
            Debug.Log("Player is NULL");
        }
        gameOverText.gameObject.SetActive(false);
    }

    // Update is called once per frame
    void Update()
    {
        CountText();
    }
    /*method that updates the score and if the goal is equal to the score it will tell the playerscript that the player is dead so we can stop movement and then
     we display the gameover text by setting it to true*/
    void CountText()
    {
        countText.text = "Score: " + _count.ToString();
        if (_count == _goal)
        {
            _player.PlayerDead();
            gameOverText.gameObject.SetActive(true);
        }
    }
    //method to update the count of score
    public void UpdateScore()
    {
        _count += 1;
    }
}
