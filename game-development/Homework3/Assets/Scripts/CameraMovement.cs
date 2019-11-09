/* 
     hmwk3_ldickerson5_CameraMovement.cs 
     
     Laneal Dickerson 
     Account: ldickerson5 
     CSc 4821 
     Homework 3 
     Due date: 10/24/2019 
     
     Description:
         This script controls the movement of the camera following the player. The script attaches itself to the camera based on the position of the camera and the offset of the
         camera between the player.
     Input:
         None
     Output:
         General camera movement
*/
using UnityEngine;

public class CameraMovement : MonoBehaviour
{
    public GameObject player;
    private Vector3 offset;
    // Start is called before the first frame update
    void Start()
    {
        offset = transform.position;
    }

    // Update is called once per frame
    void LateUpdate()
    {
        transform.position = player.transform.position + offset;
    }
}
