using ChessAPI.Model;
using Microsoft.AspNetCore.Mvc;

namespace ChessAPI.Controllers;

[ApiController]
[Route("[controller]")]
public class ChessScoreController : ControllerBase
{
    public void ScoreGame(string board)
    {
        string[] boardArray = Split(board . ",");
        
    }
    [HttpGet]
    public IActionResult Get(string board)
    {
        try
        {
            if (string.IsNullOrEmpty(board))
                return BadRequest("board no puede ser IsNullOrEmpty");

            var response = _boardService.GetScore(board);
            return Ok(response);
        }   
        catch (Exception ex)
        {
            return StatusCode(StatusCodes.Status500InternalServerError);
        }     
    }
}
